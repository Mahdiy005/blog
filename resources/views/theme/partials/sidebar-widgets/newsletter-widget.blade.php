<div class="single-sidebar-widget newsletter-widget">
    <h4 class="single-sidebar-widget__title">Newsletter</h4>
    <form action="{{ route('subscribe.store') }}" method="post">
        @csrf
        <div class="form-group mt-30">
            <div class="col-autos">

                @if (session('res'))
                    <div class="alert alert-success">
                        {{ session('res') }}
                    </div>
                @endif

                <input type="text" name="email" class="form-control" id="inlineFormInputGroup" value="{{ old('email') }}"
                    placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                <x-error-input record="email" />
            </div>
        </div>
        <button class="mt-20 bbtns d-block w-100">Subcribe</button>
    </form>
</div>
