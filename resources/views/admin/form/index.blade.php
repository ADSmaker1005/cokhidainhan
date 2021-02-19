<x-app-layout>
    <x-slot name="header">
            {{ __('Khách liên hệ') }}
    </x-slot>
    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th style="width: 5%">Thứ tự</th>
            <th>Tên khách hàng</th>
            <th>Số điện thoại</th>
            <th>Chứng minh nhân dân</th>
            <th>Lương/tháng</th>
            <th>Khoản vay mong muốn</th>
            <th>Hình thức</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($form as $index => $item)
            <tr>
                <td>
                    {{ $index+=1 }}
                </td>
                <td>
                    {{ $item->name }}
                </td>
                <td>
                    {{ $item->call }}
                </td>
                <td>
                    {{ $item->identify }}
                </td>
                <td>
                    {{ $item->salary }}
                </td>
                <td>
                    {{ $item->debt }}
                </td>
                <td>
                    {{ $item->type }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @push('css')

    @endpush
    @push('scripts')

    @endpush
</x-app-layout>
