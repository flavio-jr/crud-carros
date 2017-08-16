import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable()
export class CarrosService {

    constructor(private http: HttpClient) {}

    getCarros() {
        return [];
    }
}
