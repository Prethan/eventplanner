<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $type): Response
    {
        //validate the type to see if this exists as a role in the UserRole enum
        //if not,throw an exception
//         $roles =[];
//         foreach(\App\Enums\UserRole::cases()as $role){
//     $roles[]=strtolower($role->name);
// }
       



        // if (!in_array($type, UserRole::getValues())){
        //     throw new \Exception('Invalid role type');
        // }



        //check if the user is authenticated
        //if not,redirect to login page
        if(!$request->user()){
            return redirect()->route('login');
        }

        
       
    
        
       //check if the user has the role 
    if(strtolower($request->user()->role) === $type){
            return $next($request);
        }else {
            //if not,throw an exception 403
            throw new \Exception('Sorry you cannot access this',403);
        }

    }
}
