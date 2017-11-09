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
* PHP Framework: FuelPHP is a fast, lightweight PHP 5.3+ framework.
* UI: SBAdmin Boostrap 4 based 

## Requirements
* PHP 5.6 or higher
* MySQL Server 5.7 or higher
* LAMP/WAMP stack