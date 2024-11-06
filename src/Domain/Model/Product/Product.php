<?php


php id = $id;
$this->nombre = $nombre; 
$this->precio = $precio;
$this->descripcion = $descripcion;
$this->stock = $stock; 
} 
public function getId(): string { return $this->id; } 

public function getNombre(): string { return $this->nombre; } 

public function getPrecio(): float { return $this->precio; } 

public function getDescripcion(): string { return $this->descripcion; } 

public function getStock(): int { return $this->stock; } 

public function actualizarStock(int $cantidad): void 
{ 
if ($cantidad < 0 && abs($cantidad) > $this->stock) 
{ throw new \InvalidArgumentException("No hay suficiente stock para realizar esta operación."); } 
$this->stock += $cantidad; } 

public function estaDisponible(): bool { return $this->stock > 0; } }