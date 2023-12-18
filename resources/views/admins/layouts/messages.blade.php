@if (Session::has('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative text-center" role="alert"
        style="margin-top:0.4rem">
        <strong class="font-bold">{{ Session::get('error') }}</strong>

    </div>
@endif

@if (Session::has('success'))
    <div class="bg-gray-100 border border-green-400 text-green-700 px-4 py-3 rounded relative text-center" role="alert"
        style="margin-top:0.4rem">
        <strong class="font-bold">{{ Session::get('success') }}</strong>

    </div>
@endif
