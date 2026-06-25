# ReviewHub (Symfony 7.4)

A ReviewHub egy egyszerű review management alkalmazás, ahol felhasználók cégekről írhatnak véleményeket.  
A rendszer lehetővé teszi vélemények létrehozását, listázását, megtekintését, valamint cégenkénti statisztikák megjelenítését.

---

## Technológiák

- PHP 8.4
- Symfony 7.4
- Doctrine ORM
- MySQL
- Twig

---

## Telepítés

### 1. Repository klónozása

```bash
git clone https://github.com/CzAkos26/rating-hub.git
cd review-hub
```

### 2. Függőségek telepítése
composer install

### 3. Környezeti változók beállítása
#### .env fájl szerkesztése (MySQL kapcsolat)
#### példa:
DATABASE_URL="mysql://root:@127.0.0.1:3306/rating_hub?serverVersion=8.0&charset=utf8mb4"

### 4. Adatbázis létrehozása
php bin/console doctrine:database:create

### 5. Migrációk futtatása
php bin/console doctrine:migrations:migrate

### 6. Dev szerver indítása
Laragon (Apache + MySQL) vagy symfony serve

## Munkaidők

### 2026.06.25 (2,5 óra):

#### Symfony projekt inicializálása, beüzemelése
#### Doctrine Entity létrehozása (Review)
#### CRUD generálása Symfony MakerBundle segítségével
