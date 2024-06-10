// app.js
const express = require('express');
const nodemailer = require('nodemailer');
const bodyParser = require('body-parser');

const app = express();
const port = 3000;

// Body parser middleware
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// Serve static files (HTML, CSS, JS)
app.use(express.static('public'));

// POST route for sending emails
app.post('/send-email', (req, res) => {
    const { to, subject, message } = req.body;

    // Create a nodemailer transporter
    const transporter = nodemailer.createTransport({
        service: 'gmail',
        auth: {
            user: 'sushantnamurte1604@gmail.com',
            pass: 'Namurte160404',
        },
    });

    // Email options
    const mailOptions = {
        from: 'sushantnamurte@gmail.com',
        to,
        subject,
        text: message,
    };

    // Send email
    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            return res.status(500).send(error.toString());
        }
        res.status(200).send('Email sent: ' + info.response);
    });
});

// Start the server
app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
