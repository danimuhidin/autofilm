<?php

if (!function_exists('format_whatsapp')) {
    /**
     * Membersihkan dan memformat nomor WhatsApp menjadi format internasional 628xxxxxx
     *
     * @param string|null $nomor Nomor telepon yang akan diformat.
     * @return string Nomor telepon yang sudah diformat.
     */
    function format_whatsapp(?string $nomor): string
    {
        if (empty($nomor)) {
            return '';
        }

        // 1. Hapus semua karakter non-digit (spasi, strip, +)
        $nomor_bersih = preg_replace('/[^0-9]/', '', $nomor);

        // Jika nomor kosong setelah pembersihan, kembalikan string kosong
        if (empty($nomor_bersih)) {
            return '';
        }

        // 2. Hapus awalan '0' atau '62' yang mungkin ada
        $nomor_tanpa_awalan = ltrim($nomor_bersih, '0');
        $nomor_tanpa_awalan = ltrim($nomor_tanpa_awalan, '62');

        // 3. Tambahkan awalan '62'
        return '62' . $nomor_tanpa_awalan;
    }
}