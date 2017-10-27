<div class="card" style="width: 20rem;">
    <div class="card-body">
        <img src="{{ $logo }}" class="img-thumbnail img-responsive" alt="Logo">
        <h4 class="card-title">{{ $title }}</h4>
        <h6 class="card-subtitle mb-2 text-muted">{{ $subtitle }}</h6>
        <p class="card-text">{{ $description }}</p>
        <a href="{{ $link['href'] or '#' }}" class="card-link">{{ $link['label'] }}</a>
        <a href="{{ $additional_link['href'] or '#' }}" class="card-link">{{ $additional_link['label'] }}</a>
    </div>
</div>