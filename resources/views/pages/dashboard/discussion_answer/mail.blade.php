@component('mail::message')
# Jawaban Baru Pada Diskusi Anda

Jawaban baru telah dikirim oleh seseorang pada diskusi anda yang berjudul "{$item->title}". Segera lihat detail jawaban melalui tombol di bawah

@component('mail::button', ['url' => route('discussion.show', $item->slug)])
Detail Jawaban
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
