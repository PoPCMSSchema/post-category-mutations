<?php

declare(strict_types=1);

namespace PoPCMSSchema\PostCategoryMutations\FieldResolvers\ObjectType;

use PoPCMSSchema\Categories\TypeResolvers\ObjectType\CategoryObjectTypeResolverInterface;
use PoPCMSSchema\CustomPostCategoryMutations\FieldResolvers\ObjectType\AbstractCustomPostObjectTypeFieldResolver;
use PoPCMSSchema\CustomPostCategoryMutations\TypeResolvers\InputObjectType\AbstractSetCategoriesOnCustomPostInputObjectTypeResolver;
use PoPCMSSchema\CustomPosts\TypeResolvers\ObjectType\CustomPostObjectTypeResolverInterface;
use PoPCMSSchema\PostCategories\TypeResolvers\ObjectType\PostCategoryObjectTypeResolver;
use PoPCMSSchema\PostCategoryMutations\MutationResolvers\PayloadableSetCategoriesOnPostBulkOperationMutationResolver;
use PoPCMSSchema\PostCategoryMutations\MutationResolvers\PayloadableSetCategoriesOnPostMutationResolver;
use PoPCMSSchema\PostCategoryMutations\MutationResolvers\SetCategoriesOnPostBulkOperationMutationResolver;
use PoPCMSSchema\PostCategoryMutations\MutationResolvers\SetCategoriesOnPostMutationResolver;
use PoPCMSSchema\PostCategoryMutations\TypeResolvers\InputObjectType\PostSetCategoriesInputObjectTypeResolver;
use PoPCMSSchema\PostCategoryMutations\TypeResolvers\ObjectType\PostSetCategoriesMutationPayloadObjectTypeResolver;
use PoPCMSSchema\Posts\TypeResolvers\ObjectType\PostObjectTypeResolver;
use PoP\ComponentModel\MutationResolvers\MutationResolverInterface;
use PoP\ComponentModel\TypeResolvers\ConcreteTypeResolverInterface;

class PostObjectTypeFieldResolver extends AbstractCustomPostObjectTypeFieldResolver
{
    private ?PostObjectTypeResolver $postObjectTypeResolver = null;
    private ?SetCategoriesOnPostMutationResolver $setCategoriesOnPostMutationResolver = null;
    private ?SetCategoriesOnPostBulkOperationMutationResolver $setCategoriesOnPostBulkOperationMutationResolver = null;
    private ?PostCategoryObjectTypeResolver $postCategoryObjectTypeResolver = null;
    private ?PostSetCategoriesInputObjectTypeResolver $postSetCategoriesInputObjectTypeResolver = null;
    private ?PayloadableSetCategoriesOnPostMutationResolver $payloadableSetCategoriesOnPostMutationResolver = null;
    private ?PayloadableSetCategoriesOnPostBulkOperationMutationResolver $payloadableSetCategoriesOnPostBulkOperationMutationResolver = null;
    private ?PostSetCategoriesMutationPayloadObjectTypeResolver $postSetCategoriesMutationPayloadObjectTypeResolver = null;

    final protected function getPostObjectTypeResolver(): PostObjectTypeResolver
    {
        if ($this->postObjectTypeResolver === null) {
            /** @var PostObjectTypeResolver */
            $postObjectTypeResolver = $this->instanceManager->getInstance(PostObjectTypeResolver::class);
            $this->postObjectTypeResolver = $postObjectTypeResolver;
        }
        return $this->postObjectTypeResolver;
    }
    final protected function getSetCategoriesOnPostMutationResolver(): SetCategoriesOnPostMutationResolver
    {
        if ($this->setCategoriesOnPostMutationResolver === null) {
            /** @var SetCategoriesOnPostMutationResolver */
            $setCategoriesOnPostMutationResolver = $this->instanceManager->getInstance(SetCategoriesOnPostMutationResolver::class);
            $this->setCategoriesOnPostMutationResolver = $setCategoriesOnPostMutationResolver;
        }
        return $this->setCategoriesOnPostMutationResolver;
    }
    final protected function getSetCategoriesOnPostBulkOperationMutationResolver(): SetCategoriesOnPostBulkOperationMutationResolver
    {
        if ($this->setCategoriesOnPostBulkOperationMutationResolver === null) {
            /** @var SetCategoriesOnPostBulkOperationMutationResolver */
            $setCategoriesOnPostBulkOperationMutationResolver = $this->instanceManager->getInstance(SetCategoriesOnPostBulkOperationMutationResolver::class);
            $this->setCategoriesOnPostBulkOperationMutationResolver = $setCategoriesOnPostBulkOperationMutationResolver;
        }
        return $this->setCategoriesOnPostBulkOperationMutationResolver;
    }
    final protected function getPostCategoryObjectTypeResolver(): PostCategoryObjectTypeResolver
    {
        if ($this->postCategoryObjectTypeResolver === null) {
            /** @var PostCategoryObjectTypeResolver */
            $postCategoryObjectTypeResolver = $this->instanceManager->getInstance(PostCategoryObjectTypeResolver::class);
            $this->postCategoryObjectTypeResolver = $postCategoryObjectTypeResolver;
        }
        return $this->postCategoryObjectTypeResolver;
    }
    final protected function getPostSetCategoriesInputObjectTypeResolver(): AbstractSetCategoriesOnCustomPostInputObjectTypeResolver
    {
        if ($this->postSetCategoriesInputObjectTypeResolver === null) {
            /** @var PostSetCategoriesInputObjectTypeResolver */
            $postSetCategoriesInputObjectTypeResolver = $this->instanceManager->getInstance(PostSetCategoriesInputObjectTypeResolver::class);
            $this->postSetCategoriesInputObjectTypeResolver = $postSetCategoriesInputObjectTypeResolver;
        }
        return $this->postSetCategoriesInputObjectTypeResolver;
    }
    final protected function getPayloadableSetCategoriesOnPostMutationResolver(): PayloadableSetCategoriesOnPostMutationResolver
    {
        if ($this->payloadableSetCategoriesOnPostMutationResolver === null) {
            /** @var PayloadableSetCategoriesOnPostMutationResolver */
            $payloadableSetCategoriesOnPostMutationResolver = $this->instanceManager->getInstance(PayloadableSetCategoriesOnPostMutationResolver::class);
            $this->payloadableSetCategoriesOnPostMutationResolver = $payloadableSetCategoriesOnPostMutationResolver;
        }
        return $this->payloadableSetCategoriesOnPostMutationResolver;
    }
    final protected function getPayloadableSetCategoriesOnPostBulkOperationMutationResolver(): PayloadableSetCategoriesOnPostBulkOperationMutationResolver
    {
        if ($this->payloadableSetCategoriesOnPostBulkOperationMutationResolver === null) {
            /** @var PayloadableSetCategoriesOnPostBulkOperationMutationResolver */
            $payloadableSetCategoriesOnPostBulkOperationMutationResolver = $this->instanceManager->getInstance(PayloadableSetCategoriesOnPostBulkOperationMutationResolver::class);
            $this->payloadableSetCategoriesOnPostBulkOperationMutationResolver = $payloadableSetCategoriesOnPostBulkOperationMutationResolver;
        }
        return $this->payloadableSetCategoriesOnPostBulkOperationMutationResolver;
    }
    final protected function getPostSetCategoriesMutationPayloadObjectTypeResolver(): PostSetCategoriesMutationPayloadObjectTypeResolver
    {
        if ($this->postSetCategoriesMutationPayloadObjectTypeResolver === null) {
            /** @var PostSetCategoriesMutationPayloadObjectTypeResolver */
            $postSetCategoriesMutationPayloadObjectTypeResolver = $this->instanceManager->getInstance(PostSetCategoriesMutationPayloadObjectTypeResolver::class);
            $this->postSetCategoriesMutationPayloadObjectTypeResolver = $postSetCategoriesMutationPayloadObjectTypeResolver;
        }
        return $this->postSetCategoriesMutationPayloadObjectTypeResolver;
    }

    public function getCustomPostObjectTypeResolver(): CustomPostObjectTypeResolverInterface
    {
        return $this->getPostObjectTypeResolver();
    }

    public function getSetCategoriesMutationResolver(): MutationResolverInterface
    {
        return $this->getSetCategoriesOnPostMutationResolver();
    }

    public function getSetCategoriesBulkOperationMutationResolver(): MutationResolverInterface
    {
        return $this->getSetCategoriesOnPostBulkOperationMutationResolver();
    }

    public function getCategoryTypeResolver(): CategoryObjectTypeResolverInterface
    {
        return $this->getPostCategoryObjectTypeResolver();
    }

    public function getCustomPostSetCategoriesInputObjectTypeResolver(): AbstractSetCategoriesOnCustomPostInputObjectTypeResolver
    {
        return $this->getPostSetCategoriesInputObjectTypeResolver();
    }

    protected function getCustomPostSetCategoriesMutationPayloadObjectTypeResolver(): ConcreteTypeResolverInterface
    {
        return $this->getPostSetCategoriesMutationPayloadObjectTypeResolver();
    }

    public function getPayloadableSetCategoriesMutationResolver(): MutationResolverInterface
    {
        return $this->getPayloadableSetCategoriesOnPostMutationResolver();
    }

    public function getPayloadableSetCategoriesBulkOperationMutationResolver(): MutationResolverInterface
    {
        return $this->getPayloadableSetCategoriesOnPostBulkOperationMutationResolver();
    }

    protected function getEntityName(): string
    {
        return $this->__('post', 'post-category-mutations');
    }
}
