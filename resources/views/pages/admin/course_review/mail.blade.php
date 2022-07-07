@component('mail::message')
# Review Baru Pada Kelas

Review baru telah dikirim oleh seseorang pada sebuah kelas yang berjudul "{$item->title}". Segera lihat detail review melalui tombol di bawah

@component('mail::button', ['url' => route('course.show', $item->slug)])
Detail Review
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
