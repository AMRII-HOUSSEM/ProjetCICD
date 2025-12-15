FROM node:22

WORKDIR /app

# 1) Copier uniquement package.json pour éviter les bugs de cache
COPY package*.json package-lock.json ./

# 2) Installer toutes les dépendances (vite inclus)
RUN npm install

# 3) Copier le reste du projet
COPY . .

EXPOSE 3000

# 4) Lancer Vite correctement
CMD ["npm", "run", "dev", "--", "--host"]
