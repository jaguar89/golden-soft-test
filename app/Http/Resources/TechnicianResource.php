<?php

namespace App\Http\Resources;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TechnicianResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user' => [
                'f_name' => $this->f_name,
                'l_name' => $this->l_name,
                'email' => $this->email,
                'mobile' => $this->mobile,
                'city' => $this->city,
                'personal_image' => $this->personal_image,
                'bank' => $this->bank,
                'iban' => $this->iban,
                'location' => $this->location,
                'residency_image' => $this->residency_image,
            ],
            'token' => $this->createToken('sample_token')->plainTextToken,
            'services' => $this->services->map(function ($service) {
                return [
                    'service_id' => $service->id,
                    'service_name' => $service->name,
                    'sub_cat' => $service->subCategory->name,
                    'main_cat' => $service->subCategory->mainCategory->name,
                ];
            }),
        ];
    }
}
