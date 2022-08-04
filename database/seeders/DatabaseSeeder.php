<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cliente;
use App\Models\Compra;
use App\Models\Venta;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // CLIENTES
        $cliente = new Cliente();
        
        $cliente->dni = "76823980";
        $cliente->nombres = "Bryan Amaya";
        $cliente->celular = "935172287";
        
        $cliente->save();

        // COMPRAS
        
        $compra = new Compra();
        
        $compra->dni = "76823980";
        $compra->tipoMoneda = "euro";
        $compra->montoComprar = "150";
    
        $compra->save();


        // VENTAS

        $venta = new Venta();
        
        $venta->dni = "76823980";
        $venta->tipoMoneda = "euro";
        $venta->montoVender = "80";
    
        $venta->save();
    }
}
