const express = require('express');
const path = require('path');
const fs = require('fs');
const cors = require('cors');
const bodyParser = require('body-parser');

const app = express();
const PORT = process.env.PORT || 3000;
const SUBSCRIPTIONS_FILE = path.join(__dirname, 'subscriptions.json');

// Middleware
app.use(cors());
app.use(bodyParser.json());
app.use(express.static(path.join(__dirname)));

// API Endpoint for subscriptions
app.post('/api/subscribe', (req, res) => {
    const { email } = req.body;

    if (!email || !email.includes('@')) {
        return res.status(400).json({ success: false, message: 'Please provide a valid email address.' });
    }

    try {
        let subscriptions = [];
        if (fs.existsSync(SUBSCRIPTIONS_FILE)) {
            const data = fs.readFileSync(SUBSCRIPTIONS_FILE, 'utf8');
            subscriptions = JSON.parse(data || '[]');
        }

        if (subscriptions.includes(email)) {
            return res.status(200).json({ success: true, message: 'You are already subscribed!' });
        }

        subscriptions.push(email);
        fs.writeFileSync(SUBSCRIPTIONS_FILE, JSON.stringify(subscriptions, null, 2));

        console.log(`New subscription: ${email}`);
        res.status(200).json({ success: true, message: 'Successfully subscribed to our newsletter!' });
    } catch (error) {
        console.error('Error saving subscription:', error);
        res.status(500).json({ success: false, message: 'An error occurred while saving your subscription.' });
    }
});

// Serve the index.html for all other routes
app.get('*', (req, res) => {
    res.sendFile(path.join(__dirname, 'index.html'));
});

// Export the app for Vercel
module.exports = app;

// Only listen if run directly (not in Vercel serverless)
if (require.main === module) {
    app.listen(PORT, () => {
        console.log(`Server is running at http://localhost:${PORT}`);
    });
}
