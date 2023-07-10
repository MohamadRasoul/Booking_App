<?php

namespace App\Http\Resources;

use App\Models\Clinic;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Clinic */
class ClinicResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'about' => $this->about,
            'experience_years' => $this->experience_years,
            'session_duration' => $this->session_duration,

            'place_contact' => PlaceContactResource::make($this->whenLoaded('placeContact')),
            'admin' => AdminResource::make($this->whenLoaded('admin')),
            'city' => CityResource::make($this->whenLoaded('city')),
            'clinic_specialization' => ClinicSpecializationResource::make($this->whenLoaded('clinicSpecialization')),

            'clinic_sessions' => ClinicSessionResource::collection($this->whenLoaded('clinicSessions')),
        ];
    }
}
