<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Admin\Futsal;
use App\Services\KNearestNeighbors;

class FutsalRecommend extends Component
{
    public $recommended_futsal;
    public $loading = false;
    public  $longitude = 85.310646541649;
    public  $latitude = 27.696489573012;

    protected $rules = [
        'longitude' => 'required|numeric',
        'latitude' => 'required|numeric',
    ];

    public function recommend()
    {
        $this->validate();
        $this->loading = true;
        $samples = [];
        $labels = [];
        $futsals = Futsal::all();
        foreach ($futsals as $futsal) {
            $samples[] = [$futsal->latitude, $futsal->longitude];
            $labels[] = $futsal->name;
        }

        $classifier = new KNearestNeighbors();
        $classifier->train($samples, $labels);
        $result = $classifier->predict([$this->latitude, $this->longitude]);

        $this->recommended_futsal = Futsal::where('name', $result)->first();
        $this->loading = false;
    }
    public function render()
    {
        return view('livewire.futsal-recommend');
    }
}
