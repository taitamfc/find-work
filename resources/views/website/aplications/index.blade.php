@extends('website.layouts.master')
@section('content')
<div class="page-title">
    <h2>Ứng tuyển công việc</h2>
</div>
<div class="application-form">
<h3>name</h3>
    <form id="applyForm" action="" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Các trường thông tin của ứng viên -->
        <label for="full_name">Họ và Tên:</label>
        <input type="text" name="full_name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="phone">Số điện thoại:</label>
        <input type="tel" name="phone" required>

        <label for="resume">CV (PDF hoặc Word):</label>
        <input type="file" name="resume" accept=".pdf, .doc, .docx" required>
        <button type="submit">Ứng tuyển</button>
    </form>
</div>
@endsection
