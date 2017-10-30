<div class="card" style="width: 20rem;">
    <img src="{{ $logo }}" class="card-img-top" alt="Logo">
    <div class="card-body">
        <h4 class="card-title">{{ $title }}</h4>
        <h6 class="card-subtitle mb-2 text-muted">{{ $subtitle }}</h6>
        <p class="card-text">{{ $description }}</p>
    </div>
    <div class="card-footer">
        <a href="{{ $link['href'] or '#' }}" class="btn btn-info" target="_blank">{{ $link['label'] }}</a>
        <hr>
        <a href="{{ $additional_link['href'] or '#' }}" class="card-link" target="_blank">{{ $additional_link['label'] }}</a>
        <a href="{{ $help_link['href'] or '#' }}" class="card-link" target="_blank">{{ $help_link['label'] }}</a>
    </div>
</div>