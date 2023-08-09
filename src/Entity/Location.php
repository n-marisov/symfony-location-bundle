<?php

namespace Maris\Symfony\Location\Entity;

use Stringable;

/**
 * Сущность географической координаты.
 *
 * Хранит значения в базе данных с точностью до шести знаков после запятой.
 *
 * При установке значения Широты ($latitude) вычисляется точное значение координаты,
 * таким образом всегда выполняется тождество -90 <= $latitude <= 90.
 *
 * При установке значения Долгота ($longitude) вычисляется точное значение координаты,
 * удаляется лишние круги, таким образом всегда выполняется тождество -180 <= $longitude <= 180.
 *
 */
final class Location implements Stringable
{
    /**
     * Объект без широты и долготы не имеет смысла,
     * поэтому они указываются в конструкторе.
     * Значения приводятся к допустимому диапазону.
     * @param float $latitude Широта
     * @param float $longitude Долгота
     */
    public function __construct( float $latitude, float $longitude )
    {
        $this->setLatitude( $latitude )->setLongitude( $longitude );
    }



    /**
     * Значение на оси Y
     * Допустимый диапазон значений: -90.0 .. +90.0
     * @var float
     */
    private float $latitude;

    /**
     * Значение на оси X
     * Допустимый диапазон значений: -180.0 .. +180.0
     * @var float
     */
    private float $longitude;

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(  ): float
    {
        return $this->longitude;
    }

    /**
     * Устанавливает свойство latitude (широта).
     * Нормализует значение в диапазон -90.0 .. 90.0.
     * @param float $latitude
     * @return $this
     */
    public function setLatitude( float $latitude ): self
    {
        if ($latitude >= 360)
            $latitude = fmod($latitude, 360);

        if ($latitude >= 180 || $latitude <= -180)
            $latitude = 0 - fmod($latitude, 180);

        if ($latitude > 90)
            $latitude = 90 - fmod($latitude, 90);
        elseif ($latitude < -90)
            $latitude = -90.0 - fmod($latitude, 90.0);

        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Устанавливает свойство longitude (долгота).
     * Нормализует значение в диапазон -180.0 .. 180.0.
     * @param float $longitude
     * @return $this
     */
    public function setLongitude( float $longitude ): self
    {
        if ($longitude >= 360.0 || $longitude <= -360.0)
            $longitude = fmod($longitude, 360.0);

        if ($longitude > 180.0)
            $longitude = -180.0 + fmod($longitude, 180.0);
        elseif ($longitude < -180.0)
            $longitude = 180.0 + fmod($longitude, 180.0);

        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Приводит объект к строке.
     * @return string
     */
    public function __toString():string
    {
        return implode(",",[ $this->latitude, $this->longitude ]);
    }

}