<?php

namespace App\DomainDrivenDesign\Domain\Task\Models;

use App\DomainDrivenDesign\Domain\Task\Enums\TaskEnum;
use Database\Factories\TaskFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'task';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'category',
        'status',
    ];

    /**
     * Interact with the user's first name.
     */
    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => TaskEnum::getNameStatus($value),
        );
    }

    public static function boot()
    {
        parent::boot();

        static::creating(static function ($model) {
            $model->status = 1;
        });
    }

    protected static function newFactory(): Factory
    {
        return TaskFactory::new();
    }
}
