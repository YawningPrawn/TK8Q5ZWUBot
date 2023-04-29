import telebot

# Replace YOUR_API_TOKEN with your Telegram bot API token
bot = telebot.TeleBot("6167600168:AAHjjjFrtCvSer-3smiWfskOp-clJHEPEjQ")

@bot.message_handler(func=lambda message: True)
def echo_message(message):
    bot.reply_to(message, message.text)

bot.polling()
