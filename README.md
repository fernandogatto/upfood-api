# 🍕 UpFood API

[![Author](https://img.shields.io/badge/author-fernandogatto-%61624050)](https://github.com/fernandogatto/)
[![Languages](https://img.shields.io/github/languages/count/fernandogatto/upfood-api?color=%61624050)](#)
[![Stars](https://img.shields.io/github/stars/fernandogatto/upfood-api?color=%61624050)](https://github.com/fernandogatto/upfood-api/stargazers)
[![Forks](https://img.shields.io/github/forks/fernandogatto/upfood-api?color=%61624050)](https://github.com/fernandogatto/upfood-api/network/members)
[![Contributors](https://img.shields.io/github/contributors/fernandogatto/upfood-api?color=%61624050)](https://github.com/fernandogatto/upfood-api/graphs/contributors)
[![License](https://img.shields.io/badge/license-MIT-%61624050)](https://choosealicense.com/licenses/mit/)

> A simple food API based on Laravel Tips playlist from UpInside, a channel from YouTube.

## 🔗 Table of contents
- [Features](#features)
- [Technologies](#technologies)
- [Installation](#installation)
- [Starting](#starting)
- [Contribute](#contribute)
- [License](#license)

## 📚 Features <a name="features"/>

- CRUD Foods: title, price, category, description

## 📌 Technologies <a name="technologies"/>

- [Laravel](https://laravel.com/)

## 📂 Installation <a name="installation"/>

First of all, it is important that you have installed [XAMPP](https://www.apachefriends.org/download.html), in specific MySQL and Apache. After this, you have to install [Composer](https://getcomposer.org/download/) at latest version.

So, you have to go at folder ```xampp/htdocs``` and run this command in terminal to clone the project via HTTPS:

```bash
git clone https://github.com/fernandogatto/upfood-api.git
```

SSH URLs provide access to a Git repository via SSH, a secure protocol. If you have a SSH key registered in your Github account, clone the project using this command:

```bash
git@github.com:fernandogatto/upfood-api.git
```

**Configure DB**

In file ```.env``` configure your database connection.

**Install dependencies**

```bash
# To install the DB
php artisan migrate
```

## 🚀 Starting <a name="starting"/>

Run the following command in order in terminal:

```bash
# To start the server
php artisan serve
```

## 👍 Contribute <a name="contribute"/>

- Fork this repository.
- Create a branch with your resource: ```git checkout -b my-feature```
- Submit changes: ```git commit -m "feat: My new feature"```
- Push your branch: ```git push origin my-feature```

## 📕 License <a name="license"/>

Released in 2020. This project is under the [MIT License](https://choosealicense.com/licenses/mit/).

Build with 💜 by [Fernando Gatto](https://github.com/fernandogatto/).
