<div class="say-card">
    <div class="name">{{ $review->customer_name }}</div>

    <div class=" rate-date">
        <div class="rate">
            {{-- simplify this --}}
            @if ($review->rating == 0)
                <img src="/storage/images/empty_star.svg" class="inline rating-star" alt="Rating Star" />
            @elseif ($review->rating == 0.5)
                <img src="/storage/images/star_half_empty.svg" class="inline rating-star" alt="Rating Star" />
            @else
                <img src="/storage/images/star.svg" class="inline rating-star" alt="Rating Star" />
            @endif

            @if ($review->rating > 1.5)
                <img src="/storage/images/star.svg" class="inline rating-star" alt="Rating Star" />
            @elseif ($review->rating == 1.5)
                <img src="/storage/images/star_half_empty.svg" class="inline rating-star" alt="Rating Star" />
            @else
                <img src="/storage/images/empty_star.svg" class="inline rating-star" alt="Rating Star" />
            @endif

            @if ($review->rating > 2.5)
                <img src="/storage/images/star.svg" class="inline rating-star" alt="Rating Star" />
            @elseif ($review->rating == 2.5)
                <img src="/storage/images/star_half_empty.svg" class="inline rating-star" alt="Rating Star" />
            @else
                <img src="/storage/images/empty_star.svg" class="inline rating-star" alt="Rating Star" />
            @endif

            @if ($review->rating > 3.5)
                <img src="/storage/images/star.svg" class="inline rating-star" alt="Rating Star" />
            @elseif ($review->rating == 3.5)
                <img src="/storage/images/star_half_empty.svg" class="inline rating-star" alt="Rating Star" />
            @else
                <img src="/storage/images/empty_star.svg" class="inline rating-star" alt="Rating Star" />
            @endif

            @if ($review->rating > 4.5)
                <img src="/storage/images/star.svg" class="inline rating-star" alt="Rating Star" />
            @elseif ($review->rating == 4.5)
                <img src="/storage/images/star_half_empty.svg" class="inline rating-star" alt="Rating Star" />
            @else
                <img src="/storage/images/empty_star.svg" class="inline rating-star" alt="Rating Star" />
            @endif
        </div>

        <div class="date">{{ date('s M Y', strtotime($review->created_at)) }}</div>
    </div>

    <div class="remarks">{{ $review->remarks }}</div>
</div>
