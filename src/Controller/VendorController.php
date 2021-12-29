<?php

namespace App\Controller;

use App\Entity\Vendor;
use App\Form\vendorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VendorController extends AbstractController
{
    /**
     * @Route("/vendor", name="vendor_index")
     */
    public function vendorIndex()
    {
        $vendors = $this->getDoctrine()->getRepository(Vendor::class)->findAll();
        return $this->render(
            "vendor/index.html.twig",
            [
                'vendors' => $vendors
            ]
        );
    }
    /**
     * @Route("/vendor/detail/{id}", name="vendor_detail")
     */
    public function vendorDetail ($id) {
        $vendor = $this->getDoctrine()->getRepository(Vendor::class)->find($id);
        if ($vendor == null) {
            $this->addFlash("Error", "vendor not existed");
            return $this->redirectToRoute("vendor_index");
        } 
        return $this->render("vendor/detail.html.twig",
        [
            'vendor' => $vendor
        ]);
    }
    /**
     * @Route("vendor/delete/{id}", name="vendor_delete");
     */
    public function vendorDelete ($id) {
        $vendor = $this->getDoctrine()->getRepository(Vendor::class)->find($id);
        if ($vendor == null) {
            $this->addFlash("Error", "vendor delete failed");
        } else {
            $manager = $this->getDoctrine()->getManager();
            $manager->remove($vendor);
            $manager->flush();
            $this->addFlash("Success", "vendor delete succeed");
        }
        return $this->redirectToRoute('vendor_index');
    }
    /**
     * @Route("vendor/add", name="vendor_add");
     */
    public function vendorAdd (Request $request) {
        $vendor = new Vendor();
        $form = $this->createForm(VendorType::class,$vendor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($vendor);
            $manager->flush();

            $this->addFlash("Success", "Add vendor succeed");
            return $this->redirectToRoute("vendor_index");
        }

        return $this->renderForm("vendor/add.html.twig",
        [
            'vendorForm' => $form
        ]);
    }
    /**
     * @Route("vendor/edit/{id}", name="vendor_edit");
     */
    public function vendorEdit (Request $request, $id) {
        $vendor = $this->getDoctrine()->getRepository(Vendor::class)->find($id);
        $form = $this->createForm(VendorType::class,$vendor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($vendor);
            $manager->flush();

            $this->addFlash("Success", "Edit vendor succeed");
            return $this->redirectToRoute("vendor_index");
        }

        return $this->renderForm("vendor/edit.html.twig",
        [
            'vendorForm' => $form
        ]);
    }
}
