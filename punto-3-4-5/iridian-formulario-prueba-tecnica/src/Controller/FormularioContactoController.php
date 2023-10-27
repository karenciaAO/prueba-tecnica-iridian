<?php

namespace App\Controller;

use App\Entity\FormularioContacto;
use App\Form\FormularioContactoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormularioContactoController extends AbstractController
{
    /**
     * @Route("/formulario-contacto", name="formulario_contacto")
     */
    public function formularioContacto(Request $request)
    {
        $formularioContacto = new FormularioContacto();
        $form = $this->createForm(FormularioContactoType::class, $formularioContacto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formularioContacto);
            $entityManager->flush();

            // Puedes redirigir o mostrar un mensaje de éxito
            return $this->redirectToRoute('exito'); // Ajusta la ruta según tus necesidades
        }

        return $this->render('formulario_contacto/formulario_contacto.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/exito", name="exito")
     */
    public function exito()
    {
        // Aquí puedes mostrar un mensaje de éxito
        return $this->render('formulario_contacto/exito.html.twig');
    }
}
