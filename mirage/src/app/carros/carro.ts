import { Fabricante } from './fabricante';


export class Carro {

    constructor(
        public id: number,
        public modelo: string,
        public fabricante: Fabricante,
        public ano: Date,
        public tipo_motor: string,
        public quilometragem: number,
        public preco: number,
        public tipo_direcao: string,
        public consumo: number
    ) {}

}
