# VoucherBox
This is a simple voucher management tool with web service integration for validating vouchers.

## Operation
A voucher pool is a collection of (voucher) codes that can be used by customers (recipients) to get discounts in a web shop.
Each code may only be used once and we would like to know when it was was used by the recipient.
Since there can be many recipients in a voucher pool, we need a call that auto-generates voucher codes for each recipient.

## Functionalities
- For a given Special Offer and an expiration date generate for each Recipient a Voucher Code
- Provide an endpoint, reachable via HTTP, which receives a Voucher Code and Email and validates the Voucher Code. In Case it is valid, return the Percentage Discount and set the date of usage
- Extra: For a given Email, return all his valid Voucher Codes with the Name of the Special Offer

## Author
* Rodrigo Santa Maria - rodrigo@digitallymade.com.br / www.rodrigostamaria.com

## Components
* PHP Framework: FuelPHP 1.8 - https://fuelphp.com/downloads
* User Interface: SBAdmin Boostrap 4 based - https://startbootstrap.com/template-overviews/sb-admin/

## Requirements
* PHP 5.6 or higher
* MySQL Server 5.7 or higher
* LAMP/WAMP stack

## How to run this application
1. Extract all files of the zip or clone this repository to your LAMP "/httpdocs" folder.
2. Import the MySQL dump file from "voucherbox/EXTRA/DB/voucherbox_sample_dump.sql" into your local MySQL server.
3. Configure the file "voucherbox/fuel/app/config/development/db.php" with your MySQL username and password.
4. Access the application from you web browser like "http://localhost/voucherbox/".
5. Now you can use this application with happiness! :)
6. You can use the Postman Collection included in the "voucherbox/EXTRA/Postman" folder to test the web service calls.

## License
* MIT License