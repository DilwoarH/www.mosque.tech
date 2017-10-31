<div class="card" style="width: 20rem;">
    @if( isset( $logo ) )
        <img src="{{ $logo }}" class="card-img-top" alt="Logo">
    @endif
    <div class="card-body">
        @if( isset( $title ) )
            <h4 class="card-title">{{ $title }}</h4>
        @endif
        @if( isset( $subtitle ) )
            <h6 class="card-subtitle mb-2 text-muted">{{ $subtitle }}</h6>
        @endif
        @if( isset( $description ) )
            <p class="card-text">{{ $description }}</p>
        @endif
    </div>
    <div class="card-footer">
        @if( isset( $link ) )
            <a href="{{ $link['href'] or '#' }}" class="btn btn-info" target="_blank">{{ $link['label'] }}</a>
        @endif
        <hr>
        @if( isset( $additional_link ) )
            <a href="{{ $additional_link['href'] or '#' }}" class="card-link" target="_blank">{{ $additional_link['label'] }}</a>
        @endif
        @if( isset( $help_link ) )
            <a href="{{ $help_link['href'] or '#' }}" class="card-link" target="_blank">{{ $help_link['label'] }}</a>
        @endif
    </div>
</div>