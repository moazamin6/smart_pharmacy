<?php

return [

    'invoice_new_customer' => [
        'subject' => '{invoice_number} reikningur skapaður',
        'body' => 'Kæri {customer_name},<br /><br />Við höfum útbúið eftirfarandi reikning: <strong>{invoice_number}</strong>.<br /><br />Þú getur fundið nánari upplýsingar um reikninginn og greiðslumáta á þessari slóð: <a href="{invoice_guest_link}">{invoice_number}</a>.<br /><br />Vinsamlega hafið samband með athugasemdir.<br /><br />Með kveðju,<br />{company_name}',
    ],

    'invoice_remind_customer' => [
        'subject' => '{invoice_number} tilkynning um gjaldfallin reikning',
        'body' => 'Kæri {customer_name},<br /><br />Þetta er tilkynning um gjaldfallinn reikning <strong>{invoice_number}</strong>.<br /><br />Upphæð reiknings er {invoice_total} sem gjaldfell <strong>{invoice_due_date}</strong>.<br /><br />Þú getur fundið nánari upplýsingar um reikninginn á þessari slóð: <a href="{invoice_guest_link}">{invoice_number}</a>.<br /><br />Með kveðju,<br />{company_name}',
    ],

    'invoice_remind_admin' => [
        'subject' => '{invoice_number} tilkynning um gjaldfallin reikning',
        'body' => 'Hello,<br /><br />{customer_name} has received an overdue notice for <strong>{invoice_number}</strong> invoice.<br /><br />The invoice total is {invoice_total} and was due <strong>{invoice_due_date}</strong>.<br /><br />You can see the invoice details from the following link: <a href="{invoice_admin_link}">{invoice_number}</a>.<br /><br />Best Regards,<br />{company_name}',
    ],

    'invoice_recur_customer' => [
        'subject' => '{invoice_number} recurring invoice created',
        'body' => 'Dear {customer_name},<br /><br />Based on your recurring circle, we have prepared the following invoice for you: <strong>{invoice_number}</strong>.<br /><br />You can see the invoice details and proceed with the payment from the following link: <a href="{invoice_guest_link}">{invoice_number}</a>.<br /><br />Feel free to contact us with any questions.<br /><br />Best Regards,<br />{company_name}',
    ],

    'invoice_recur_admin' => [
        'subject' => '{invoice_number} recurring invoice created',
        'body' => 'Hello,<br /><br />Based on {customer_name} recurring circle, <strong>{invoice_number}</strong> invoice has been automatically created.<br /><br />You can see the invoice details from the following link: <a href="{invoice_admin_link}">{invoice_number}</a>.<br /><br />Best Regards,<br />{company_name}',
    ],

    'invoice_payment_customer' => [
        'subject' => 'Payment received for {invoice_number} invoice',
        'body' => 'Dear {customer_name},<br /><br />Thank you for the payment. Find the payment details below:<br /><br />-------------------------------------------------<br />Amount: <strong>{transaction_total}</strong><br />Date: <strong>{transaction_paid_date}</strong><br />Invoice Number: <strong>{invoice_number}</strong><br />-------------------------------------------------<br /><br />You can always see the invoice details from the following link: <a href="{invoice_guest_link}">{invoice_number}</a>.<br /><br />Feel free to contact us with any questions.<br /><br />Best Regards,<br />{company_name}',
    ],

    'invoice_payment_admin' => [
        'subject' => 'Payment received for {invoice_number} invoice',
        'body' => 'Hello,<br /><br />{customer_name} recorded a payment for <strong>{invoice_number}</strong> invoice.<br /><br />You can see the invoice details from the following link: <a href="{invoice_admin_link}">{invoice_number}</a>.<br /><br />Best Regards,<br />{company_name}',
    ],

    'bill_remind_admin' => [
        'subject' => '{bill_number} bill reminding notice',
        'body' => 'Hello,<br /><br />This is a reminding notice for <strong>{bill_number}</strong> bill to {vendor_name}.<br /><br />The bill total is {bill_total} and is due <strong>{bill_due_date}</strong>.<br /><br />You can see the bill details from the following link: <a href="{bill_admin_link}">{bill_number}</a>.<br /><br />Best Regards,<br />{company_name}',
    ],

    'bill_recur_admin' => [
        'subject' => '{bill_number} recurring bill created',
        'body' => 'Hello,<br /><br />Based on {vendor_name} recurring circle, <strong>{bill_number}</strong> invoice has been automatically created.<br /><br />You can see the bill details from the following link: <a href="{bill_admin_link}">{bill_number}</a>.<br /><br />Best Regards,<br />{company_name}',
    ],

];
