<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/getproductlist", methods="GET", name="product_list_api")
     */
    public function getproductListAPI(): JsonResponse
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();
        return $this->json(['products' => $products], 200);
    }
    /**
     * @Route("/products", name="product_index")
     */
    public function productIndex()
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();
        return $this->render(
            "product/index.html.twig",
            [
                'products' => $products
            ]
        );
    }
    /**
     * @Route("/product/detail/{id}", name="product_detail")
     */
    public function productDetail($id)
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        if ($product == null){
            $this->addFlash("Error", "Product was not existed!");
            return $this->redirectToRoute('product_index');
        }
        return $this->render(
            "product/detail.html.twig",
            [
                'product' => $product
            ]
        );
    }
    /**
     * @Route("/product/delete/{id}", name="product_delete")
     */
    public function productDelete($id){
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        if ($product == null){
            $this->addFlash("Error", "product delete failed!");
        }else {
            $manager = $this->getDoctrine()->getManager();
            $manager->remove($product);
            $manager->flush();
            $this->addFlash("Success", "Product was deleted successfully!");
        }
        return $this->redirectToRoute('product_index');
    }
    /**
     * @Route("/product/add", name="product_add")
     */
    public function productAdd(Request $request){
        // $product = new product();
        // $form = $this->createForm(ProductType::class, $product);
        // $form->handleRequest($request);

        // if($form->isSubmitted() && $form->isValid()) 
        // {
        //     $manager = $this->getDoctrine()->getManager();
        //     $manager->persist($product);
        //     $manager->flush();

        //     $this->addFlash("Success", "Add product succeed");
        //     return $this->redirectToRoute("product_index");
        // }
        // return $this->renderForm("product/add.html.twig",
        // [
        //     'productForm' => $form
        // ]);
    }
    /**
     * @Route("/product/edit/{id}", name="product_edit")
     */
    public function productEdit(Request $request, $id){
        // $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        // $form = $this->createForm(ProductType::class, $product);
        // $form->handleRequest($request);

        // if($form->isSubmitted() && $form->isValid()) 
        // {
        //     $manager = $this->getDoctrine()->getManager();
        //     $manager->persist($product);
        //     $manager->flush();

        //     $this->addFlash("Success", "Edit product succeed");
        //     return $this->redirectToRoute("product_index");
        // }
        // return $this->renderForm("product/edit.html.twig",
        // [
        //     'productForm' => $form
        // ]);
    }
}
