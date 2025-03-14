# Stripe Payment Integration Without Libraries (Using cURL)

## Table of Contents
1. [Introduction](#introduction)
2. [Features](#features)
3. [Prerequisites](#prerequisites)
4. [Setup Instructions](#setup-instructions)
5. [API Key Retrieval](#api-key-retrieval)
6. [How It Works](#how-it-works)
7. [Error Handling](#error-handling)
8. [Contributing](#contributing)
9. [License](#license)

---

## Introduction

This project demonstrates how to integrate Stripe payments into a web application **without using any external libraries**, relying solely on PHP's `cURL` for API communication. It provides a clear understanding of how to interact directly with Stripe's API for processing payments.

---

## Features

- **No External Libraries**: The code does not rely on any third-party libraries or SDKs.
- **Secure API Key Management**: Demonstrates how to securely handle API keys.
- **Error Handling**: Includes robust error handling for failed payments and API connection issues.
- **Multi-Language Support**: Comments and documentation are provided in English, Persian, and Arabic.

---

## Prerequisites

Before running the project, ensure you have the following:

1. A Stripe account ([Sign up here](https://dashboard.stripe.com/register)).
2. PHP installed on your server or local machine.
3. Basic knowledge of HTML, JavaScript, and PHP.

---

## Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/stripe-payment-without-library.git

2. Navigate to the project directory:
   ```bash
   cd stripe-payment-without-library

3. Replace the placeholder API keys in process_payment.php with your actual Stripe secret key:
   ```bash
   $secretKey = 'sk_test_YourSecretKeyHere';

4. Open the index.html file in your browser to test the payment form.

---
## API Key Retrieval

To retrieve your Stripe API keys:

1. Log in to your Stripe Dashboard .
2. Navigate to Developers > API Keys .
3. Copy the Publishable Key and Secret Key .
4. Use the Publishable Key in the frontend (index.html) and the Secret Key in the backend (process_payment.php).
Note : Always keep your Secret Key secure and never expose it in the frontend.

## Error Handling
The project includes robust error handling for:

Invalid card details.
API connection issues.
Failed payment attempts.
Error messages are displayed to the user in real-time using the card-errors div.

## Contributing
Contributions are welcome! To contribute:

Fork the repository.
Create a new branch (git checkout -b feature/YourFeatureName).
Commit your changes (git commit -m "Add YourFeatureName").
Push to the branch (git push origin feature/YourFeatureName).
Open a pull request.

License
This project is licensed under the MIT License. See the LICENSE file for details.

---
---


# عنوان :
ایجاد درگاه پرداخت استرایپ بدون استفاده از کتابخانه ها (با استفاده از cURL)

# توضیحات :

این مخزن نحوه ادغام درگاه پرداخت استرایپ در یک وب‌اپلیکیشن را نشان می‌دهد، بدون استفاده از هیچ کتابخانه خارجی و فقط با استفاده از cURL در PHP برای ارتباط با API. این پروژه شامل یک مثال کامل از پردازش پرداخت‌ها، مدیریت خطاهای احتمالی و امنیت کلیدهای API است. این پروژه برای توسعه‌دهندگانی طراحی شده است که به دنبال درک مکانیزم‌های زیربنایی API استرایپ هستند.

---

# مستندات به زبان فارسی

## معرفی
این پروژه نحوه ادغام درگاه پرداخت استرایپ در یک وب‌اپلیکیشن را نشان می‌دهد، بدون استفاده از هیچ کتابخانه خارجی و فقط با استفاده از cURL در PHP برای ارتباط با API.

## ویژگی‌ها
بدون کتابخانه خارجی : این کد به هیچ کتابخانه یا SDK سومی وابسته نیست.
مدیریت امن کلیدهای API : نحوه مدیریت امن کلیدهای API را نشان می‌دهد.
مدیریت خطاهای پرداخت : شامل مدیریت قوی خطاهای احتمالی و مشکلات اتصال به API.

## نحوه کار
کاربر جزئیات کارت خود را در فرم فرانت‌اند (index.php) وارد می‌کند.
Stripe.js اطلاعات کارت را به صورت امن توکن‌سازی کرده و به بک‌اند ارسال می‌کند.
بک‌اند (process_payment.php) از cURL برای ارسال داده‌های توکن‌سازی شده به API استرایپ استفاده می‌کند.
در صورت موفقیت‌آمیز بودن پرداخت، بک‌اند پیام موفقیت را بازمی‌گرداند؛ در غیر این صورت، خطاهای احتمالی مدیریت می‌شوند.

---
---

# العنوان :
تكامل الدفع عبر Stripe بدون استخدام المكتبات (باستخدام cURL)

# الوصف :
يوضح هذا المستودع كيفية دمج بوابة الدفع Stripe في تطبيق ويب دون استخدام أي مكتبات خارجية ، معتمداً فقط على cURL في PHP للتواصل مع API. يحتوي المشروع على مثال كامل لمعالجة عمليات الدفع، التعامل مع الأخطاء المحتملة، وإدارة أمان مفاتيح API. تم تصميم هذا المشروع للمطورين الذين يرغبون في فهم الآليات الأساسية لواجهة برمجة تطبيقات Stripe.

---

# الوثائق باللغة العربية
## مقدمة
يوضح هذا المشروع كيفية دمج بوابة الدفع Stripe في تطبيق ويب دون استخدام أي مكتبات خارجية ، معتمداً فقط على cURL في PHP للتواصل مع API.

## الميزات
بدون مكتبات خارجية : لا يعتمد هذا الكود على أي مكتبات أو SDK خارجية.
إدارة آمنة لمفاتيح API : يوضح كيفية إدارة مفاتيح API بشكل آمن.
إدارة الأخطاء : يتضمن إدارة قوية للأخطاء المحتملة ومشكلات الاتصال بـ API.

## كيف يعمل
يقوم المستخدم بإدخال تفاصيل بطاقته في نموذج الواجهة الأمامية (index.php).
تقوم Stripe.js بتشفير معلومات البطاقة وإرسالها إلى الخلفية.
تعتمد الخلفية (process_payment.php) على cURL لإرسال البيانات المشفرة إلى API Stripe.
إذا نجحت عملية الدفع، تُرجع الخلفية رسالة نجاح؛ وإلا يتم التعامل مع الأخطاء بشكل مناسب.
