# Paygiga Payment API

Paygiga is the API service that lists payments made to bank payment systems.


#### Usage
```php
include("src/Paygiga.php");

$data=new Paygiga(
	"MERCHANT_KEY",
	"MERCHANT_PASSWORD",
	"CUSTOMER_ID"
);
```


#### Getting Login
```php
$data->getLogin();
```
<details>
 <summary>View Response</summary>

```js
{
statu: 0,
errorCode: 0,
message: "",
session_id: "225c3b99bd6f0bedf2ddd5225053f48c"
}
```
</details>


#### Getting Bank List
```php
$data->getBank("SESSION_ID");
```
<details>
 <summary>View Response</summary>

```js
{
banks: [
{
bankId: 1,
bankCode: "garanti",
bankIban: "00062",
bankName: "Garanti Bankası",
maxWithdrawalAmount: 0
},
{
bankId: 2,
bankCode: "isbank",
bankIban: "00064",
bankName: "İş Bankası",
maxWithdrawalAmount: 0
},
{
bankId: 3,
bankCode: "yapikredi",
bankIban: "00067",
bankName: "Yapı Kredi",
maxWithdrawalAmount: 0
},
{
bankId: 4,
bankCode: "akbank",
bankIban: "00046",
bankName: "Akbank",
maxWithdrawalAmount: 4000000
},
{
bankId: 5,
bankCode: "finansbank",
bankIban: "00111",
bankName: "Finansbank",
maxWithdrawalAmount: 0
},
{
bankId: 6,
bankCode: "ziraat",
bankIban: "00010",
bankName: "Ziraat Bankası",
maxWithdrawalAmount: 0
},
{
bankId: 7,
bankCode: "vakifbank",
bankIban: "00015",
bankName: "Vakıflar Bankası",
maxWithdrawalAmount: 0
},
{
bankId: 8,
bankCode: "teb",
bankIban: "00032",
bankName: "TEB",
maxWithdrawalAmount: 0
},
{
bankId: 9,
bankCode: "denizbank",
bankIban: "00134",
bankName: "Denizbank",
maxWithdrawalAmount: 0
},
{
bankId: 10,
bankCode: "enpara",
bankIban: "00111",
bankName: "Enpara",
maxWithdrawalAmount: 0
},
{
bankId: 11,
bankCode: "halkbank",
bankIban: "00012",
bankName: "Halkbank",
maxWithdrawalAmount: 0
},
{
bankId: 12,
bankCode: "ingbank",
bankIban: "00099",
bankName: "ING Bank",
maxWithdrawalAmount: 0
},
{
bankId: 13,
bankCode: "papara",
bankIban: "",
bankName: "Papara",
maxWithdrawalAmount: 0
}
],
statu: 0,
errorCode: 0,
message: null,
session_id: "225c3b99bd6f0bedf2ddd5225053f48c"
}
```
</details>


#### Getting Bank Amount List
```php
$data->getAmount("SESSION_ID","BANK_CODE");
```
<details>
 <summary>View Response</summary>

```js
{
{
amounts: [
{
id: 6781,
amount: 10000,
currencyCode: "TRY",
Count: 1
},
{
id: 6532,
amount: 2580000,
currencyCode: "TRY",
Count: 1
},
{
id: 6545,
amount: 5000000,
currencyCode: "TRY",
Count: 1
},
{
id: 6584,
amount: 6500000,
currencyCode: "TRY",
Count: 1
},
{
id: 6571,
amount: 8000000,
currencyCode: "TRY",
Count: 1
},
{
id: 6597,
amount: 9010000,
currencyCode: "TRY",
Count: 1
},
{
id: 4690,
amount: 10000200,
currencyCode: "TRY",
Count: 3
}
],
statu: 0,
errorCode: 0,
message: null,
session_id: "225c3b99bd6f0bedf2ddd5225053f48c"
}
```
</details>
