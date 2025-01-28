
# PHP ASSESSMENT

This repository contains three PHP projects showcasing different functionalities: managing and displaying nested arrays, sorting arrays recursively, and implementing a basic shopping cart application.

## Table of Contents

- [PHP ASSESSMENT](#php-assessment)
  - [Table of Contents](#table-of-contents)
  - [Project Overview](#project-overview)
  - [Setup Instructions](#setup-instructions)
  - [Projects](#projects)
    - [PHP Nested Array Display](#php-nested-array-display)
      - [Overview](#overview)
      - [Key Files](#key-files)
      - [Usage](#usage)
      - [Example Output](#example-output)
    - [PHP Recursive Sort Array](#php-recursive-sort-array)
      - [Overview](#overview-1)
      - [Key Files](#key-files-1)
      - [Usage](#usage-1)
      - [Features](#features)
    - [Shop Application](#shop-application)
      - [Overview](#overview-2)
      - [Features](#features-1)
      - [Key Files](#key-files-2)
      - [Setup](#setup)
      - [Project Structure](#project-structure)

---

## Project Overview

This repository demonstrates core PHP capabilities through the following projects:

- **Nested Array Display**: Print structured data using recursive functions.
- **Recursive Sort Array**: Sort multidimensional arrays by specified keys.
- **Shop Application**: A simplified shopping cart system with tax and shipping calculations.

These projects are ideal for exploring PHP fundamentals, recursive functions, and object-oriented programming.

---

## Setup Instructions

1. **Requirements**:
   - PHP 8.1 or higher
   - Composer (for the Shop Application)

2. **Clone the Repository**:
   ```bash
   git clone https://github.com/ivanmarquez/sourcetoad-assessment.git
   cd sourcetoad-assessment
   ```

3. **Run Individual Projects**:
   - Navigate to the corresponding project directory and execute scripts using PHP:
     ```bash
     php <script_name>.php
     ```

4. **For the Shop Application**:
   - Install dependencies:
     ```bash
     composer install
     ```
   - Navigate to the corresponding project directory and execute scripts using PHP:
     ```bash
     php index.php

---

## Projects

### PHP Nested Array Display

#### Overview
This project provides tools to display and manage nested arrays, such as guest details with bookings.

#### Key Files
- **`data.php`**: Defines a `$data` array containing nested guest details.
- **`01.php`**: Includes `data.php` and defines the `printNestedArray` function for recursive printing.

#### Usage
1. Ensure `data.php` and `01.php` are in the same directory.
2. Run the script:
   ```bash
   php 01.php
   ```
3. Modify `data.php` to change the dataset.

#### Example Output
```plaintext
0:
  guest_id: 177
  guest_type: crew
  first_name: Marco
  ...
```

---

### PHP Recursive Sort Array

#### Overview
This project sorts multidimensional arrays recursively by specified keys.

#### Key Files
- **`data.php`**: Contains sample data.
- **`02.php`**: Implements a `recursiveSort` function to sort the data.

#### Usage
1. Run the script:
   ```bash
   php 02.php
   ```
2. Modify `data.php` to change the dataset and rerun the script.

#### Features
- Recursive sorting by multiple keys.
- Example usage:
   ```php
   include 'data.php';
   recursiveSort($data, ['last_name', 'account_id']);
   print_r($data);
   ```

---

### Shop Application

#### Overview
A simple e-commerce application to manage customers, items, and shopping carts.

#### Features
- **Customer Management**: Create and manage customer details.
- **Cart Management**: Add/update/remove items, calculate totals, and apply taxes.
- **Tax & Shipping**: 7% tax calculation and integration with external shipping services.

#### Key Files
- **Models**:
  - `Address.php`
  - `Customer.php`
  - `Item.php`
  - `Cart.php`
- **Services**:
  - `ShippingService.php`
- **Entry Point**:
  - `index.php`

#### Setup
1. Install dependencies:
   ```bash
   composer install
   ```
2. Run the application:
   ```bash
   php index.php
   ```
3. View examples in `index.php`.

#### Project Structure
```plaintext
project/
├── models/
├── services/
├── vendor/
├── index.php
├── composer.json
└── README.md
```

---

**Developer Information**
- **Name**: Iván Márquez
- **Email**: [ivan.marquez@live.com.mx](mailto:ivan.marquez@live.com.mx)
