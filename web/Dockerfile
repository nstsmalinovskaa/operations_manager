FROM node:18

WORKDIR /var/www/nuxt

# Установка зависимостей
COPY ./nuxt/package.json ./nuxt/package-lock.json ./
RUN npm install

# Копирование исходного кода
COPY ./nuxt ./

EXPOSE 3000
CMD ["npm", "run", "dev"]
