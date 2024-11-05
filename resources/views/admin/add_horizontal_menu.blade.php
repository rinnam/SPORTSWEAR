@extends('admin.index')
@section('mutil-content')
<div class="submenu-form">
    <h3>Thêm Menu Ngang</h3>
    <form>
        <!-- Tên Menu -->
        <div class="form-group">
            <label for="menu-name">Tên Menu</label>
            <input type="text" id="menu-name" class="form-control" placeholder="Nhập tên menu">
        </div>
        
        <!-- Loại Menu -->
        <div class="form-group">
            <label for="menu-type">Loại Menu</label>
            <select id="menu-type" class="form-control">
                <option value="san-pham">Sản phẩm</option>
                <option value="binh-thuong">Bình thường</option>
            </select>
        </div>
        
        <!-- Nội Dung -->
        <div class="form-group">
            <label for="menu-content">Nội dung</label>
            <textarea id="menu-content" class="form-control" rows="3" placeholder="Nhập nội dung"></textarea>
        </div>
        
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection
