@props([
    'icon' => 'fas fa-wrench',
    'title' => 'Expert Technicians',
    'description' =>
        'Our team of skilled technicians are experienced in repairing a wide range of mobile phone models.',
])

<div class="feature-card">
    <i class="{{ $icon }}"></i>
    <h3>{{ $title }}</h3>
    <p>{{ $description }}</p>
</div>
