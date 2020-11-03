<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">{{ Auth::user()->scope->name }}</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">{{ Auth::user()->resource()->name }}</button>
        </div>
        </button>
    </div>
</div>