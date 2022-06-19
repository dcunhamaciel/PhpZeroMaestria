<?php

class Humano
{

}

class Animal
{

}

$marcos = new Humano();
$turca = new Animal();

if ($marcos instanceof Humano) {
    echo "Marcos é um Humano";
} else {
    echo "Marcos não é um Humano";
}

if ($turca instanceof Humano) {
    echo "Turna é um Humano";
} else {
    echo "Turna não é um Humano";
}
