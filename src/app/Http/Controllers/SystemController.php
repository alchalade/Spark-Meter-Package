<?php


namespace Inensus\SparkMeter\app\Http\Controllers;
use App\Http\Resources\ApiResource;
use Illuminate\Routing\Controller;
use Inensus\SparkMeter\app\Services\SystemService;

class SystemController extends Controller
{
    private $systemService;
    public function __construct(SystemService $systemService )
    {
        $this->systemService=$systemService;
    }

    public function show():ApiResource
    {
        return new ApiResource($this->systemService->getSystemInfo());
    }
}
