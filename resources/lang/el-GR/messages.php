<?php

return [

    'success' => [
        'added'             => ':type προστέθηκε!',
        'updated'           => ':type ενημερώθηκε!',
        'deleted'           => ':type διεγράφη!',
        'duplicated'        => ':type αντιγράφηκε!',
        'imported'          => ':type εισήχθη!',
    ],
    'error' => [
        'over_payment'      => 'Σφάλμα: Η πληρωμή δεν προστέθηκε! Το ποσό ξεπερνάει το σύνολο.',
        'not_user_company'  => 'Σφάλμα: Δεν επιτρέπεται να διαχειριστείτε αυτή την εταιρεία!',
        'customer'          => 'Σφάλμα: Ο χρήστης δεν δημιουργήθηκε!  Ο/Η :name χρησιμοποιεί ήδη αυτό το email.',
        'no_file'           => 'Σφάλμα: Δεν έχετε επιλέξει αρχείο!',
    ],
    'warning' => [
        'deleted'           => 'Προειδοποίηση: Δεν επιτρέπεται να διαγράψετε το <b>:name</b> επειδή έχει :text που σχετίζονται.',
        'disabled'          => 'Προειδοποίηση: Δεν επιτρέπεται να διαγράψετε το <b>: name</b> επειδή έχει :text που σχετίζονται.',
    ],

];