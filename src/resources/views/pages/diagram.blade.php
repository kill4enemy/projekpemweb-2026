@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-6">
    Rencana Perancangan Sistem
</h2>

<div class="bg-white p-6 rounded shadow mb-6">
    <h3 class="text-xl font-bold mb-4">
        ERD Sistem Penyewaan Lapangan Padel
    </h3>

    <div class="mermaid">
erDiagram
    USERS ||--o{ BOOKINGS : melakukan
    COURTS ||--o{ BOOKINGS : memiliki

    USERS {
        bigint id PK
        string name
        string email
        string password
        timestamp created_at
        timestamp updated_at
    }

    COURTS {
        bigint id PK
        string name
        string location
        integer price_per_hour
        boolean is_active
        timestamp created_at
        timestamp updated_at
    }

    BOOKINGS {
        bigint id PK
        bigint user_id FK
        bigint court_id FK
        date booking_date
        time start_time
        time end_time
        integer total_price
        string status
        timestamp created_at
        timestamp updated_at
    }
    </div>
</div>

<div class="bg-white p-6 rounded shadow">
    <h3 class="text-xl font-bold mb-4">
        Flowchart Proses Booking
    </h3>

    <div class="mermaid">
flowchart TD
    A[Mulai] --> B[Customer membuka halaman booking]
    B --> C[Pilih lapangan]
    C --> D[Pilih tanggal dan jam]
    D --> E[Submit booking]
    E --> F{Data valid?}
    F -- Tidak --> G[Tampilkan pesan error]
    G --> D
    F -- Ya --> H[Simpan data booking]
    H --> I[Status booking: pending]
    I --> J[Admin mengecek booking]
    J --> K{Dikonfirmasi?}
    K -- Ya --> L[Status confirmed]
    K -- Tidak --> M[Status cancelled]
    L --> N[Selesai]
    M --> N[Selesai]
    </div>
</div>

@endsection