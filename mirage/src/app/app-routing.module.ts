import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CarrosComponent } from './carros/carros.component';
import { NotFoundComponent } from './not-found/not-found.component';

const routes = [
    {path: '', redirectTo: 'carros', pathMatch: 'full'},
    {path: 'carros', component: CarrosComponent},
    {path: '**', component: NotFoundComponent}
];

@NgModule({
    imports: [
        RouterModule.forRoot(
            routes,
            { enableTracing: true }
        )
    ],
    exports: [RouterModule]
})

export class AppRoutingModule {}
