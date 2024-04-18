@extends('layouts.layout')

<div class="head-title">
    <h1>Calendar</h1>
</div>

<!-- Google Calendar embed code -->
<!-- <iframe src="https://calendar.google.com/calendar/u/0?cid=Y18yYTZkN2Y1YWVhZDNjN2ZhZWYyMjNiN2ZiMDVhNDBiMWY0YzVhMjVmNmZlNTkyNjQ5MDg3MDc1YWE5N2QzZDJkQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
 -->




<div class="g-calendar-container">
    <!-- Form Container -->
    <div class="g-calendar-form-container">
        <iframe class="g-calendar" src="https://calendar.google.com/calendar/embed?src=c_2a6d7f5aead3c7faef223b7fb05a40b1f4c5a25f6fe592649087075aa97d3d2d%40group.calendar.google.com&ctz=UTC" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
</div>