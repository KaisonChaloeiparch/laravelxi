<form action="{{ route('courses.register') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">ชื่อ-นามสกุล:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="email">อีเมล:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="id_card">สำเนาบัตรประจำตัว (เฉพาะไฟล์ JPG, PNG, PDF):</label>
        <input type="file" id="id_card" name="id_card" required>
        @error('id_card')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit">ลงทะเบียน</button>
</form>
