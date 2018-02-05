<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Form\Formulaire;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function newAction(Request $request, \Swift_Mailer $mailer)
    {
        $formulaire = new Formulaire();

        $form = $this->createFormBuilder($formulaire)
        ->add('firstName', TextType::class, array('label' => 'Prénom'))
        ->add('lastName', TextType::class, array('label' => 'Nom'))
        ->add('email', TextType::class, array('label' => 'Email'))
        ->add('city', TextType::class,array('label' => 'Ville de Résidence'))
        ->add('age', ChoiceType::class, array('label' => 'Âge', 
            'choices' => array(
                '-20 ans' => '-20',
                '21-35 ans' => '21-35',
                '+35 ans' => '+35',
                ),
            ))
        ->add('favcity', ChoiceType::class, array('label' => 'Pays de votre choix', 
            'choices' => array(
                'Angleterre' => 'angleterre',
                'Espagne' => 'espagne',
                'Allemagne' => 'allemagne',
                'Italie' => 'italie',
                'Suisse' => 'suisse',
                'Bahamas' => 'bahamas',
                ),
            ))
        ->add('save', SubmitType::class, array('label' => 'Envoyez votre formulaire', 'attr' => array('class' => 'waves-effect waves-light btn')))
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $formulaire = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($formulaire);
            $em->flush();

            $this->sendEmail($formulaire->getFirstName(),$mailer , $formulaire->getEmail());
            return $this->redirectToRoute('homepage');
        }

        return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
            ));
    }

    public function sendEmail($firstName, \Swift_Mailer $mailer, $email)
    {
        $message = (new\Swift_Message('Cook Angels Formulaire'))
        ->setFrom('tatayo902@gmail.com')
        ->setTo($email)
        ->setBody(
            $this->renderView(
                'Emails/confirmation.html.twig', 
                array('prénom' => $firstName)
                ),
            'text/html'
            );
        $mailer->send($message);
    }
}
