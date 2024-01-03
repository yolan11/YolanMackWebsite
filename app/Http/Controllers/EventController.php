<?php

namespace App\Http\Controllers;

use App\Mail\NewAppointment;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Config; // Importer la classe Config
use App\Notifications\FormSubmittedNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;


class EventController extends Controller
{
    public function create()
    {
        return view('events.create');
    }

    public function index()
    {
        $events = Event::all();

        return view('events.index', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'familyName' => 'required',
            'firstName' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
            'eventDate' => 'required',
            'eventLocation' => 'required',
            'eventType' => 'required',
            'streetNumber' => 'required',
            'streetName' => 'required',
            'city' => 'required',
            'country' => 'required',
            'information' => 'required',
        ]);

        $event = new Event();
        $event->familyName = $request->familyName;
        $event->firstName = $request->firstName;
        $event->email = $request->email;
        $event->phoneNumber = $request->phoneNumber;
        $event->eventDate = $request->eventDate;
        $event->eventLocation = $request->eventLocation;
        $event->eventType = $request->eventType;
        $event->streetNumber = $request->streetNumber;
        $event->streetName = $request->streetName;
        $event->city = $request->city;
        $event->country = $request->country;
        $event->information = $request->information;
        $event->save();

        // Envoi de l'e-mail
        $details = [
            'familyName' => $request->familyName,
            'firstName' => $request->firstName,
            'email' => $request->email,
            // Ajoutez d'autres détails que vous souhaitez inclure dans l'e-mail
        ];

        Mail::to('destinataire@example.com')->send(new NewAppointment($details));

        return redirect('/Reservation')->with('success', 'La reservation à été envoyé avec succès.');
    }

    public function update(Request $request, $id){
        // Récupérer la marque à mettre à jour
        $event = Event::findOrFail($id);

        $oldEventName = $event->familyName;

        // Mettre à jour les champs avec les nouvelles valeurs
        $event->familyName = $request->input('editFamilyName');
        $event->firstName = $request->input('editFirstName');
        $event->email = $request->input('editEmail');
        $event->phoneNumber = $request->input('editPhoneNumber');
        $event->eventDate = $request->input('editEventDate');
        $event->eventLocation = $request->input('editEventLocation');
        $event->eventType = $request->input('editEventType');
        $event->streetNumber = $request->input('editStreetNumber');
        $event->streetName = $request->input('editStreetName');
        $event->city = $request->input('editCity');
        $event->country = $request->input('editCountry');
        $event->information = $request->input('editInformation');

        // Sauvegarder les modifications
        $event->save();

        // Rediriger avec un message de succès ou autre
        return redirect('/dashboard/event')->with('successUpdateBrand', "La marque $oldEventName a été mise à jour avec succès.");
    }

    public function destroy($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return redirect('/dashboard/event')->with('errorDeleteBrand', 'Marque non trouvée');
        }

        $deletedEvent = $event->name;

        $event->delete();

        return redirect('/dashboard/event')->with('successDeleteBrand', "L'utilisateur $deletedEvent a été supprimée avec succès");
    }

    public function getEventData($id)
    {
        $event = Event::find($id); // Récupérer l'événement en fonction de l'ID

        if (!$event) {
            return response()->json(['error' => 'Événement non trouvé'], 404);
        }

        // Retourner les données de l'événement au format JSON
        return response()->json($event);
    }
}



