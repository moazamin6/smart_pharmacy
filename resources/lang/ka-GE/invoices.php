<?php

return [

    'invoice_number' => 'ფაქტურის ნომერი',
    'invoice_date' => 'ფაქტურის თარიღი',
    'total_price' => 'ჯამური ღირებულება',
    'due_date' => 'გადახდის ვადის თარიღი',
    'order_number' => 'შეკვეთის ნომერი',
    'bill_to' => 'ანგარიში',

    'quantity' => 'რაოდენობა',
    'price' => 'ფასი',
    'sub_total' => 'ჯამი',
    'discount' => 'ფასდაკლება',
    'tax_total' => 'გადასახადების ჯამი',
    'total' => 'სულ',

    'item_name' => 'საქონლის სახელი|საქონლის სახელები',

    'show_discount' => ':discount% ფასდაკლება',
    'add_discount' => 'ფასდაკლებით',
    'discount_desc' => 'ჯამი',

    'payment_due' => 'გადახდა ვადამდე',
    'paid' => 'გადახდილი',
    'histories' => 'ისტორია',
    'payments' => 'გადახდები',
    'add_payment' => 'გადახდის დამატება',
    'mark_paid' => 'ფასიანის მონიშვნა',
    'mark_sent' => 'გაგზავნის მონიშვნა',
    'download_pdf' => 'PDF ის ჩამოტვირთვა',
    'send_mail' => 'ელ-ფოსტის გაგზავნა',
    'all_invoices' => 'შესვლა ყველა ფაქტურის სანახავად',
    'create_invoice' => 'ფაქტურის შექმნა',
    'send_invoice' => 'ფაქტურის გაგზავნა',
    'get_paid' => 'გადახდის მიღება',
    'accept_payments' => 'ონლაინ გადახდის მიღება',

    'statuses' => [
        'draft' => 'პროექტი',
        'sent' => 'გაგზავნა',
        'viewed' => 'ნახვა',
        'approved' => 'დადასტურებული',
        'partial' => 'ნაწილობრივი',
        'paid' => 'გადახდილი',
    ],

    'messages' => [
        'email_sent' => 'ფაქტურა ელ-ფოსტით წარმატებით გაიგზავნა!',
        'marked_sent' => 'ფაქტურა მონიშნულია, როგორც წარმატებით გაგზავნილი!',
        'email_required' => 'არ არის ამ მომხმარებლის ელ-ფოსტის მისამართი!',
        'draft' => 'ეს არის a <b>პროექტი</b> ფაქტურა, რომელიც აისახება დიაგრამაში გაგზავნის შემდეგ.',

        'status' => [
            'created' => 'შექმნილია :თარიღი',
            'send' => [
                'draft' => 'არ გაიგზავნა',
                'sent' => 'გაგზავნილია :თარიღი',
            ],
            'paid' => [
                'await' => 'გადახდის მოლოდინი',
            ],
        ],
    ],

    'notification' => [
        'message' => 'თქვენ მიიღეთ ეს წერილი, რადგან თქვენ გაქვთ მომავალი :ფაქტურა თანხაზე :მომხმარებელი მომხმარებელი.',
        'button' => 'ახლავე გადახდა',
    ],

];
