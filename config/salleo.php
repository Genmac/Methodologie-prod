<?php
return [
    // Une réservation ne peut être annulée que X heures avant son début
    'delai_annulation_heures' => env('SALLEO_DELAI_ANNULATION', 24),
    // Plage horaire d'ouverture (utilisée pour les statistiques)
    'heure_ouverture' => '08:00',
    'heure_fermeture' => '18:00',
];
