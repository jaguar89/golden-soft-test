<div class="my-8">
    <h1 class="text-2xl font-bold mb-4">فني الصيانة</h1>
    <table class="table-auto w-full text-right p-2 border border-collapse">
        <thead class="bg-teal-700 text-white">
        <tr>
            <th class="p-4">الإسم الأول</th>
            <th class="p-4">اسم العائلة</th>
            <th class="p-4">رقم الموبايل</th>
            <th class="p-4">البريد الإلكتروني</th>
            <th class="p-4">المدينة</th>
            <th class="p-4">الحالة</th>
            <th class="p-4">عمليات</th>
        </tr>
        </thead>
        <tbody class="bg-teal-100">
        @foreach($technicians as $tech)
            <tr>
                <td class="p-4">{{$tech->f_name}}</td>
                <td class="p-4">{{$tech->l_name}}</td>
                <td class="p-4">{{$tech->mobile}}</td>
                <td class="p-4">{{$tech->email}}</td>
                <td class="p-4">{{$tech->city}}</td>
                <td class="p-4">{{$tech->approved ? "نشط" : "غير نشط"}}</td>
                <td class="p-4">
                    <a href="{{ route('technician.approve', $tech->id) }}"
                       class="bg-teal-500 text-white px-4 py-2 rounded-full
              {{ $tech->approved ? 'cursor-not-allowed opacity-50' : 'hover:bg-teal-600 focus:outline-none focus:shadow-outline-teal active:bg-teal-800' }}"
                        {{ $tech->approved ? 'disabled' : '' }}>
                        تنشيط
                    </a>

                    <a href="{{ route('technician.disapprove', $tech->id) }}"
                       class="bg-teal-500 text-white px-4 py-2 mr-2 rounded-full
              {{ $tech->approved ? 'hover:bg-teal-600 focus:outline-none focus:shadow-outline-teal active:bg-teal-800':'cursor-not-allowed opacity-50'  }}"
                        {{ $tech->approved ? '' : 'disabled' }}>
                        إلغاء تنشيط
                    </a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
