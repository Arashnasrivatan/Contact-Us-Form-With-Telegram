# Contact Us with Telegram message ✉️✨


This project provides a "Contact Us" form that uses Telegram for message delivery instead of traditional email. Built with PHP and integrated via a Telegram bot, it allows users to send messages directly to a specified Telegram chat.

## 🌟 Features

- 📝 **Simple Form Interface**: A clean and intuitive contact form for easy user interactions.
- 🤖 **Telegram Integration**: Messages are sent instantly to your Telegram account via a bot, ensuring fast and secure communication.
- 🔒 **Security**: Protects user data and prevents spam through bot verification.

## 🚀 Get Started

To get your "Contact Us" form up and running with Telegram integration, follow these steps:

1. **🤖 Create a Bot with BotFather**
   - Open Telegram and search for [BotFather](https://t.me/BotFather).
   - Start a chat with BotFather and use the command `/newbot` to create a new bot.
   - Follow the instructions to set a name and username for your bot.
   - BotFather will provide you with a **bot token**. Save this token, as you'll need it later.

2. **🔢 Get Your Numeric Chat ID**
   - To send messages to a specific chat, you'll need the chat's numeric ID.
   - You can obtain your chat ID by starting a conversation with your bot and then using a tool or API to retrieve it, or by sending a message to your bot and checking the output from the bot's API.

3. **▶️ Start the Bot**
   - Open the Telegram app and search for your bot by its username.
   - Start the bot by clicking the "Start" button or sending `/start`.

4. **🛠 Configure Your Code**
   - In your project's code, find the configuration section where you'll set your bot token and chat ID. For example:

   ```php
   // Set your bot token and chat ID
   $botToken = ''; // Insert your bot token here
   $chatId = '';   // Replace this with your actual chat ID
   ```

   - Replace the placeholders with your actual bot token and chat ID.

5. **🎉 Done!**

## Developed by 👨‍💻

- [Arash_aio](https://t.me/arash_aio)


**Made with ❤️ by Arash Nasrivatan**